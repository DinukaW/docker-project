FROM mysql:5.7
ENV MYSQL_ROOT_PASSWORD secret
ENV MYSQL_DATABASE company
COPY ./CreateTable.sql InsertData.sql /docker-entrypoint-initdb.d/
