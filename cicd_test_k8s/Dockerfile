FROM python:3.8-slim
MAINTAINER Devs 'devs@devs.devs'
COPY ./flask_app/requirements.txt /tmp/
RUN pip install --requirement /tmp/requirements.txt
COPY ./flask_app /app
WORKDIR /app
ENTRYPOINT ["python", "app.py"]