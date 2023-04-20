FROM docker.io/bitnami/laravel:10

# Instalar vi
RUN apt-get update && apt-get install -y vim

# Configuración de colores para la terminal
RUN echo 'export TERM=xterm-256color' >> ~/.bashrc && \
    echo 'export LS_OPTIONS="--color=auto"' >> ~/.bashrc && \
    echo 'export CLICOLOR="Yes"' >> ~/.bashrc && \
    echo 'export LSCOLORS="Gxfxcxdxbxegedabagacad"' >> ~/.bashrc && \
    echo 'alias ls="ls $LS_OPTIONS"' >> ~/.bashrc && \
    echo 'alias ll="ls $LS_OPTIONS -l"' >> ~/.bashrc

# Establecer el color del prompt de la terminal
RUN echo 'export PS1='\''\[\033[01;32m\]$USER\[\033[00m\]@\[\033[01;34m\]\w\[\033[00m\]\$ '\'' >> ~/.bashrc'

RUN echo 'alias artisan="php artisan"' >> ~/.bashrc
