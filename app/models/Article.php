<?php
class Article extends Model
{
	public function author() {
        return $this->belongs_to('Author');
    }
}