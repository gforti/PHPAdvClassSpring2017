<?php
/**
 *
 * @author GFORTI
 * 
 * Create an interface that will allow you to come up with
 * a set of functions that can be agreed upon for use on
 * similar classes.
 * 
 * while this is a CRUD interface, it is also known as a data access object
 * 
 */
interface IDAO {
    /*crud*/
    function create($values);
    function read($id);
    function update($values);
    function delete($id);
    function readAll();
    
}
