<?php
$properties = array(
    'id' => $this->action->id .'-grid',
    'dataProvider' => $dataProvider,
    'columns' => isset($columns) ? $columns : array(),
    'showTableOnEmpty' => false,
    'title' => 'notrepay',
);
$this->widget('application.widgets.Excel.ExcelSheetView', $properties);
?>