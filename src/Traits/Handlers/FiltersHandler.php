<?php

namespace Kurt\Google\Traits\Handlers;

trait FiltersHandler {

	public function getFilters($filters)
	{
		return $this->filters;
	}

	public function setFilters($filters)
	{
		$this->filters = $filters;

		return $this;
	}

	public function unsetFilters()
	{
		$this->filters = null;

		return $this;
	}

	/**
	 * Determine if filters are set.
	 * 
	 * @return boolean
	 */
	private function filtersAreSet()
	{
		return ! is_null($this->filters);
	}
	
}