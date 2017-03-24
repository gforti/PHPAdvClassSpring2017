<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author GFORTI
 */
interface IDAO {
    
    function create($values);
    function read($id);
    function readAll();    
    function update($values);
    function delete($id);
}
