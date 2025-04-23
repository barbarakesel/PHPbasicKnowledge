ALTER TABLE shippers ALTER COLUMN shipper_id TYPE bigint;

--B-tree индекс для поиска по диапазонам
CREATE INDEX ix_btree_shipper_id ON shippers (shipper_id);
--Hash индекс для поиска по точному значению
CREATE INDEX ix_hash_company_name ON shippers USING hash (company_name);
--Составной индекс с использованием правил для хорошей селективности
CREATE INDEX ix_company_name_phone ON shippers (company_name, phone);

--DROP INDEX ix_btree_shipper_id;
--DROP INDEX ix_hash_company_name;
--DROP INDEX ix_company_name_phone;

--test 1
EXPLAIN ANALYZE
SELECT * FROM shippers
WHERE shipper_id BETWEEN 120000 AND 125000;

--test 2
EXPLAIN ANALYZE
SELECT * FROM shippers
WHERE company_name = 'Gislason Inc';

--test 3
EXPLAIN ANALYZE
SELECT * FROM shippers
WHERE company_name LIKE '%Inc' AND phone LIKE '+1%'
