#!/bin/bash

mysqldump -uroot -tN --skip-comments hrs > fixtures/all.sql
