FROM node:16-buster

RUN apt-get -y update \
    && apt-get install -y git

COPY ./scripts /tmp/scripts

RUN chmod +x /tmp/scripts

ENTRYPOINT [ "/tmp/scripts/frontend-install.sh" ]

CMD [ "npm", "run", "watch" ]