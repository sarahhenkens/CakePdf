<?php
Abstract class AbstractPdfEngine {

	abstract public function output($html);

	abstract public function setPageSize($pageSize);

	abstract public function setOrientation($orientation);

}