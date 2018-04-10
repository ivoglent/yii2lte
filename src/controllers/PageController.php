<?php
/**
 * Created by PhpStorm.
 * User: ivoglent
 * Date: 4/10/18
 * Time: 12:54 PM
 */

namespace ivoglent\yii2lte\controllers;


use yii\web\Controller;

class PageController extends Controller
{
    /**
     * @param string $layout
     * @return string
     */
    public function actionDashboard($layout = 'main') {
        return $this->render($layout === 'main' ? 'dashboard1' : 'dashboard2');
    }

    /**
     * @return string
     */
    public function actionTopNavigation() {
        return $this->render('top-navigation');
    }

    /**
     * @return string
     */
    public function actionCalendar() {
        return $this->render('calendar');
    }

    /**
     * @return string
     */
    public function actionChartChartjs() {
        return $this->render('chart-chartjs');
    }

    /**
     * @return string
     */
    public function actionChartFlot() {
        return $this->render('chart-flot');
    }

    /**
     * @return string
     */
    public function actionChartInline() {
        return $this->render('chart-inline');
    }

    /**
     * @return string
     */
    public function actionChartMorris() {
        return $this->render('chart-morris');
    }

    /**
     * @return string
     */
    public function actionLayoutCollapsedSidebar() {
        return $this->render('collapsed-sidebar');
    }
    /**
     * @return string
     */
    public function actionLayoutBoxed() {
        return $this->render('layout-boxed');
    }

    /**
     * @return string
     */
    public function actionLayoutFixed() {
        return $this->render('layout-fixed');
    }
    /**
     * @return string
     */
    public function actionExample404() {
        return $this->render('example-404');
    }

    /**
     * @return string
     */
    public function actionExample500() {
        return $this->render('example-500');
    }

    /**
     * @return string
     */
    public function actionExampleBlank() {
        return $this->render('example-blank');
    }

    /**
     * @return string
     */
    public function actionExampleInvoicePrint() {
        return $this->render('example-invoice-print');
    }


    /**
     * @return string
     */
    public function actionExampleInvoice() {
        return $this->render('example-invoice');
    }

    /**
     * @return string
     */
    public function actionExamplePace() {
        return $this->render('example-pace');
    }

    /**
     * @return string
     */
    public function actionExampleProfile() {
        return $this->render('example-profile');
    }

    /**
     * @return string
     */
    public function actionFormAdvanced() {
        return $this->render('form-advanced');
    }

    /**
     * @return string
     */
    public function actionFormEditors() {
        return $this->render('form-editors');
    }

    /**
     * @return string
     */
    public function actionFormGeneral() {
        return $this->render('form-general');
    }

    /**
     * @return string
     */
    public function actionMailboxCompose() {
        return $this->render('mailbox-compose');
    }

    /**
     * @return string
     */
    public function actionMailboxMailbox() {
        return $this->render('mailbox-mailbox');
    }

    /**
     * @return string
     */
    public function actionMailboxReadmail() {
        return $this->render('mailbox-readmail');
    }

    /**
     * @return string
     */
    public function actionTableData() {
        return $this->render('table-data');
    }

    /**
     * @return string
     */
    public function actionTableSimple() {
        return $this->render('table-simple');
    }

    /**
     * @return string
     */
    public function actionUiButton() {
        return $this->render('ui-button');
    }

    /**
     * @return string
     */
    public function actionUiGeneral() {
        return $this->render('ui-general');
    }

    /**
     * @return string
     */
    public function actionUiIcons() {
        return $this->render('ui-icons');
    }

    /**
     * @return string
     */
    public function actionUiModals() {
        return $this->render('ui-modals');
    }

    /**
     * @return string
     */
    public function actionUiSliders() {
        return $this->render('ui-sliders');
    }

    /**
     * @return string
     */
    public function actionUiTimeline() {
        return $this->render('ui-timeline');
    }

    /**
     * @return string
     */
    public function actionWidgets() {
        return $this->render('widgets');
    }
}
