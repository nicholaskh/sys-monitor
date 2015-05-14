#!/bin/bash

mysqldump -uroot -dN --skip-comments hrs > create_tables.sql
