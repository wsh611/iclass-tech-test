echo "Importing data"
cd /test_db
mysql -uroot -p$MYSQL_ROOT_PASSWORD < employees_partitioned.sql
mysql -uroot -p$MYSQL_ROOT_PASSWORD < test_employees_md5.sql
echo "Data imported"