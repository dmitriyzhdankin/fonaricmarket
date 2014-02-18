<?php

class shopFrontendProductReviewsAction extends shopFrontendProductAction
{
    public function execute()
    {
        $this->setLayout(new shopFrontendLayout());

        $product_model = new shopProductModel();
        $product = $product_model->getByField('url', waRequest::param('product_url'));
        if (!$product) {
            throw new waException('Product not found', 404);
        }

        $product = new shopProduct($product);

        $this->getBreadcrumbs($product, true);

        $reviews_model = new shopProductReviewsModel();
        $reviews = $reviews_model->getFullTree(
            $product['id'], 0, null, 'datetime DESC', array('escape' => true)
        );

        $config = wa()->getConfig();

        $this->view->assign(array(
            'product' => $product,
            'reviews' => $reviews,
            'reviews_count' => $reviews_model->count($product['id'], false),
            'reply_allowed' => true,
            'auth_adapters' => $adapters = wa()->getAuthAdapters(),
            'request_captcha' => $config->getGeneralSettings('require_captcha'),
            'require_authorization' => $config->getGeneralSettings('require_authorization')
        ));

        //echo serialize($product['data']['name']);
        $my_r_title=$product['data']['name']." - отзывы: интернет-магазин товаров для туризма и активного отдыха fonarik-market.ru";
        $my_r_description = "Хотите узнать больше про ".$product['data']['name']."? Читайте отзывы в нашем интернет-магазине fonarik-market.ru!";
        $my_r_keywords = $product['data']['name']." отзывы, интернет-магазин, fonarik-market.ru";
        $this->view->assign('my_r_title', $my_r_title);
        $this->view->assign('my_r_description', $my_r_description);
        $this->view->assign('my_r_keywords', $my_r_keywords);
        
        
        
        $storage = wa()->getStorage();
        $current_auth = $storage->read('auth_user_data');
        $current_auth_source = $current_auth ? $current_auth['source'] : shopProductReviewsModel::AUTH_GUEST;

        $this->view->assign('current_auth_source', $current_auth_source);
        $this->view->assign('current_auth', $current_auth, true);

        $this->setThemeTemplate('reviews.html');
    }

}
