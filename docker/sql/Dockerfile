FROM mysql:8.0
MAINTAINER Vladimir

#sql_env
ENV MYSQL_ROOT_PASSWORD: root
ENV MYSQL_DATABASE: test_db
ENV MYSQL_USER: devuser
ENV MYSQL_PASSWORD: devpass

# RUN echo "default-authentication-plugin=mysql_native_password" >> /etc/my.cnf

EXPOSE 3306
CMD ["mysqld"]
