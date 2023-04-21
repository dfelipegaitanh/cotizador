FROM docker.io/bitnami/laravel:10

# Configuración de colores para la terminal
RUN echo 'export TERM=xterm-256color' >> ~/.bashrc && \
    echo 'export LS_OPTIONS="--color=auto"' >> ~/.bashrc && \
    echo 'export CLICOLOR="Yes"' >> ~/.bashrc && \
    echo 'export LSCOLORS="Gxfxcxdxbxegedabagacad"' >> ~/.bashrc && \
    echo 'alias ls="ls $LS_OPTIONS"' >> ~/.bashrc && \
    echo 'alias ll="ls $LS_OPTIONS -l"' >> ~/.bashrc

