docker compose exec database /bin/bash -c "mariadb-dump -u user -puser db" > ./db/backup.sql