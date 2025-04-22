--1
SELECT product_name, units_in_stock 
FROM products
WHERE units_in_stock < ALL (
    SELECT AVG(quantity)
    FROM order_details
    GROUP BY product_id
)

--2
SELECT customer_id, SUM(freight) AS freight_sum
FROM orders 
WHERE freight >= (SELECT AVG(freight) FROM orders) 
    AND shipped_date BETWEEN '1996-07-16' AND '1996-07-31'
GROUP BY customer_id
ORDER BY freight_sum

--3
SELECT o.customer_id, o.ship_country, SUM(d.unit_price*d.quantity*(1-d.discount)) AS order_price FROM orders o
JOIN order_details d ON o.order_id = d.order_id
WHERE order_date >= '1997-09-01' AND ship_country IN ('Argentina', 'Bolivia', 'Brazil', 'Chile', 'Colombia', 'Ecuador', 'Guyana', 'Paraguay', 'Peru', 'Suriname', 'Uruguay', 'Venezuela' )
GROUP BY o.order_id, o.customer_id, o.ship_country
ORDER BY order_price DESC
LIMIT 3
--4
SELECT DISTINCT p.product_name FROM products p
JOIN order_details o ON p.product_id = o.product_id
WHERE o.quantity=10
