Showing Records: <?= $this->start+1?> to <?=min($this->total_records, $this->start+$this->records_per_page)?> of <?= $this->total_records?>