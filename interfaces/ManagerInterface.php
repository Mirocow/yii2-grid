<?php

namespace bupy7\grid\interfaces;

/**
 * @author Belosludcev Vasilij <https://github.com/bupy7>
 * @since 1.1.0
 */
interface ManagerInterface
{
    /**
     * Save visible columns settings.
     * @param mixed $gridId ID of grid.
     * @param array $columns List of columns.
     */
    public function setVisibleColumns($gridId, $columns);
    
    /**
     * Returned visible columns of grid.
     * @param mixed $gridId ID of grid.
     * @return false|array
     */
    public function getVisibleColumns($gridId);
    
    /**
     * Save resizable columns settings.
     * @param mixed $gridId ID of grid.
     * @param array $columns List of columns.
     * @since 1.1.3
     */
    public function setResizableColumns($gridId, $columns);
    
    /**
     * Returned resizable columns of grid.
     * @param mixed $gridId ID of grid.
     * @return array
     * @since 1.1.3
     */
    public function getResizableColumns($gridId);
}

