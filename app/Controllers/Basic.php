<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use CodeIgniter\View\View;

 
class Basic extends Controller
{
    public function viewWhere()
    {
        $db  = \Config\Database::connect();
        $sql = "SELECT * FROM products WHERE productLine = 'Planes'" ;
        $list = $db->query($sql)->getResult();
        $data['data'] = $list;
        
        echo view('/basic/where', $data);
    }

    public function viewDistinct()
    {
        $db  = \Config\Database::connect();
        $sql = "SELECT DISTINCT productScale, productLine FROM products LIMIT 10" ;
        $list = $db->query($sql)->getResult();
        $data['data'] = $list;
        
        echo view('/basic/distinct', $data);
    }

    public function viewOperatorAnd()
    {
        $db  = \Config\Database::connect();
        $sql = "SELECT firstName , lastName , jobTitle FROM employees WHERE officeCode = 1 AND jobTitle = 'Sales Rep'" ;
        $list = $db->query($sql)->getResult();
        $data['data'] = $list;
        
        echo view('/basic/operator-and', $data);
    }

    public function viewOperatorOr()
    {
        $db  = \Config\Database::connect();
        $sql = "SELECT firstName , lastName , jobTitle FROM employees WHERE officeCode = 1 OR officeCode = 3";
        $list = $db->query($sql)->getResult();
        $data['data'] = $list;
        
        echo view('/basic/operator-or', $data);
    }

    public function viewOperatorIn()
    {
        $db  = \Config\Database::connect();
        $sql = "SELECT officeCode , city , phone , country FROM offices WHERE country IN ('USA' , 'France')";
        $list = $db->query($sql)->getResult();
        $data['data'] = $list;
        
        echo view('/basic/operator-in', $data);
    }

    public function viewBetween()
    {
        $db  = \Config\Database::connect();
        $sql = "SELECT orderNumber , orderDate , status , comments FROM orders WHERE orderDate BETWEEN '2003-01-01' AND '2003-02-01'";
        $list = $db->query($sql)->getResult();
        $data['data'] = $list;
        
        echo view('/basic/between', $data);
    }

    public function viewLike()
    {
        $db  = \Config\Database::connect();
        $sql = "SELECT firstName , lastName , jobTitle FROM employees WHERE jobTitle LIKE 'Sales%' LIMIT 10" ;
        $list = $db->query($sql)->getResult();
        $data['data'] = $list;
        
        echo view('/basic/like', $data);
    }

    public function viewIsNull()
    {
        $db  = \Config\Database::connect();
        $sql = "SELECT customerName , country , salesrepemployeenumber FROM customers WHERE salesrepemployeenumber IS NULL ORDER BY customerName" ;
        $list = $db->query($sql)->getResult();
        $data['data'] = $list;
        
        echo view('/basic/is-null', $data);
    }


    public function viewAlias()
    {
        $db  = \Config\Database::connect();
        $sql = "SELECT emp.* FROM employees AS emp LIMIT 10" ;
        $list = $db->query($sql)->getResult();
        $data['data'] = $list;
        
        echo view('/basic/alias', $data);
    }

    public function viewInnerJoin()
    {
        $db  = \Config\Database::connect();
        $sql = "SELECT customerName , phone , addressLine1 FROM orders ord INNER JOIN customers cust ON ord.customerNumber = cust.customerNumber LIMIT 20; " ;
        $list = $db->query($sql)->getResult();
        $data['data'] = $list;
        
        echo view('/basic/inner-join', $data);
    }

    public function viewLeftJoin()
    {
        $db  = \Config\Database::connect();
        $sql = "SELECT ord.customerNumber , city , country FROM orders ord LEFT JOIN customers cust ON ord.customerNumber = cust.customerNumber LIMIT 15;" ;
        $list = $db->query($sql)->getResult();
        $data['data'] = $list;
        
        echo view('/basic/left-join', $data);
    }

    public function viewGroupBy()
    {
        $db  = \Config\Database::connect();
        $sql = "SELECT ord.customerNumber , city , country FROM orders ord LEFT JOIN customers cust ON ord.customerNumber = cust.customerNumber GROUP BY country;" ;
        $list = $db->query($sql)->getResult();
        $data['data'] = $list;
        
        echo view('/basic/group-by', $data);
    }

    public function viewHaving()
    {
        $db  = \Config\Database::connect();
        $sql = "SELECT  ordernumber, SUM(quantityOrdered) AS itemsCount, SUM(priceeach*quantityOrdered) AS total
                FROM orderdetails GROUP BY ordernumber HAVING total > 1000 LIMIT 20;" ;
        $list = $db->query($sql)->getResult();
        $data['data'] = $list;
        
        echo view('/basic/having', $data);
    }

    public function viewRollup()
    {
        $db  = \Config\Database::connect();
        $sql = "SELECT SUM(creditLimit) totalCredit FROM customers;" ;
        $list = $db->query($sql)->getResult();
        $data['data'] = $list;
        
        echo view('/basic/rollup', $data);
    }
}