--1
SELECT c.company_name AS customer_company, CONCAT(e.first_name,' ', e.last_name) AS employee_name
FROM orders o
JOIN customers c ON o.customer_id = c.customer_id
JOIN employees e ON o.employee_id = e.employee_id
JOIN shippers s ON o.ship_via = s.shipper_id
WHERE c.city = 'London' 
    AND e.city = 'London'
    AND s.company_name = 'Speedy Express';


--2
SELECT p.product_name, p.units_in_stock, s.contact_name, s.phone
FROM products p
JOIN suppliers s ON p.supplier_id = s.supplier_id
JOIN categories c ON p.category_id = c.category_id
WHERE p.discontinued = 0
    AND c.category_name IN ('Beverages', 'Seafood')
    AND p.units_in_stock < 20;


--3
SELECT c.contact_name, o.order_id FROM customers c
LEFT JOIN orders o ON c.customer_id = o.customer_id
WHERE o.order_id IS NULL

--4
SELECT c.contact_name, o.order_id
FROM orders o
RIGHT JOIN customers c ON o.customer_id = c.customer_id
WHERE o.order_id IS NULL;
