<?php 


class chartModel
{
	
	use Model;

	protected $table = 'chart_data';

    public function getAllLabels()
    {
        $query = "SELECT value FROM chart_data";
        return $this->query($query);
    }

}

