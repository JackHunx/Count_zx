<?php
$properties = array(
    'id' => $this->action->id .'-grid',
    'dataProvider' => $dataProvider,
    'columns' => isset($columns) ? $columns : array(),
    'showTableOnEmpty' => false,
    'title' => 'tongji',
);
$this->widget('application.widgets.Excel.ExcelSheetView', $properties);
?>