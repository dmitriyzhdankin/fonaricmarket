<?php

class shopProductsDeleteListController extends waJsonController
{
    public function execute()
    {
        $this->getStorage()->close();

        $hash = waRequest::post('hash', '');
        if ($hash) {
            $hash = explode('/', $hash);
            $remove = waRequest::post('remove', array());
            if (count($remove) == 1 && $remove[0] == 'list') {
                if ($model = $this->getModel($hash[0])) {
                    $model->delete($hash[1]);
                }
            } else {
                $count = waRequest::post('count', null, waRequest::TYPE_INT);
                $this->delete($hash, $count, count($remove) == 2);
            }
        } else {
            $this->deleteProducts(waRequest::post('product_id', array(), waRequest::TYPE_ARRAY_INT));
            if (waRequest::post('get_lists')) {
                $this->response['lists'] = $this->getLists();
            }
        }
    }

    private function delete($hash, $count, $del_list = false) {
        $collection = new shopProductsCollection(implode('/', $hash));
        if ($count) {
            $product_ids = array_keys($collection->getProducts('*', 0, $count, false));
            $this->deleteProducts($product_ids);

            // DECREASE count.
            // Ignoring this case for dynamic set lead to tricky BUG, result of which in worst case is deleting ALL products
            $info = $collection->getInfo();
            if ($hash[0] == 'set' || $hash[0] == 'category' || $hash[0] == 'type') {
                $model = $this->getModel($hash[0]);
                $model->updateById($hash[1], array(
                    'count' => max($info['count'] - $count, 0)
                ));
            }
        }
        $rest_count = $collection->count();
        $this->response['rest_count'] = $rest_count;
        $this->response['count'] = $count;
        if ($rest_count == 0) {
            $this->response['lists'] = $this->getLists();
            if ($del_list && $model = $this->getModel($hash[0])) {
                return $model->delete($hash[1]);
            }
        }
        return true;
    }

    public function deleteProducts(array $product_ids)
    {
        if ($product_ids) {
            $product_model = new shopProductModel();
            return $product_model->delete($product_ids);
        }
        return false;
    }

    /**
     * @param $type
     * @return shopSetModel|shopCategoryModel
     */
    public function getModel($type)
    {
        static $model = array();
        if (!isset($model[$type])) {
            if ($type == 'category') {
                $model[$type] = new shopCategoryModel();
            } else if ($type == 'set') {
                $model[$type] = new shopSetModel();
            } else if ($type == 'type') {
                $model[$type] = new shopTypeModel();
            } else {
                $model[$type] = null;
            }
        }
        return $model[$type];
    }

    public function getProductsModel($type)
    {
        static $model = array();
        if (!isset($model[$type])) {
            if ($type == 'category') {
                $model[$type] = new shopCategoryProductsModel();
            } else if ($type == 'set') {
                $model[$type] = new shopSetProductsModel();
            } else {
                $model[$type] = null;
            }
        }
        return $model[$type];
    }

    public function getLists()
    {
        $product_model  = new shopProductModel();
        $category_model = $this->getModel('category');
        $set_model  = $this->getModel('set');
        $type_model = $this->getModel('type');
        return array(
            'category' => $category_model->getAll('id'),
            'set'  => $set_model->getAll('id'),
            'type' => $type_model->getAll('id'),
            'all'  => array(
                'count' => $product_model->countAll()
            )
        );
    }
}