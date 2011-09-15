<?php

/*
 * This file is part of the Congow\Orient package.
 *
 * (c) Alessandro Nadalin <alessandro.nadalin@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Interface Adapter defines the methods a protocol binding for Congow\Orient needs to
 * implement for interoperability with the libraries that want to rely on it.
 *
 * @package     Congow\Orient
 * @subpackage  Contract
 * @author      Alessandro Nadalin <alessandro.nadalin@gmail.com>
 */

namespace Congow\Orient\Contract\Protocol;

interface Adapter
{
    /**
     * Executes a command against Congow\OrientDB thorugh the protocol binding, 
     * returning mixed feedback or throwing an exception in case of error.
     * 
     * @param   string $command SQL-like command to execute
     * @throws  \Exception
     */
    public function execute($sql);
    
    /**
     * Retrieves a record, in form of a string that can be JSON-encoded.
     * 
     * @param   string $rid
     * @return  string
     */
    //public function find($rid);
}

