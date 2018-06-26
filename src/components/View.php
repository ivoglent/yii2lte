<?php
/**
 * Created by PhpStorm.
 * User: ivoglent
 * Date: 6/26/18
 * Time: 10:08 AM
 */

namespace ivoglent\yii2lte\components;


class View extends \yii\web\View
{
    public $components = [
        /**
         * Message template :
         * [
         *      'items' => [
         *          [
         *              'title' => 'string',
         *              'description' => 'string',
         *              'image' => 'string',
         *              'time' => 'string',
         *              'url' => 'Url to message details'
         *          ]
         *      ],
         *      'url' => 'Url to all messages'
         * ]
         */
        'messages' => [
            'url' => '',
            'items' => []
        ],
        /**
         * Notification template
         * [
         *      'url' => 'Url to all notification',
         *      'items' => [
         *          [
         *              'content' => 'string',
         *              'url' => 'Url to notification details',
         *              'icon' => 'font icon'
         *          ]
         *      ]
         * ]
         *
         */
        'notifications' => [
            'url' => '',
            'items' => []
        ],
        'urls' => [
            'userProfileUrl' => '',
            'logoutUrl' => ''
        ],
        'footer' => ''
    ];

    /**
     * Set view component
     *
     * @param $name
     * @param array $values
     */
    public function setComponent($name, $values = []) {
        $this->components[$name] = $values;
    }

    /**
     * @param $name
     * @return bool|mixed
     */
    public function getComponent($name) {
        if (isset($this->components[$name])) {
            return $this->components[$name];
        }
        return false;
    }
}