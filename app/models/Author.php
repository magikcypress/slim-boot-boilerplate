<?php
class Author extends Model 
{
	public function article() {
        return $this->has_many('Article');
    }
}