# Establecer la imagen base de Node.js
FROM node:14

# Establecer el directorio de trabajo
WORKDIR /app

# Copiar package.json y package-lock.json al directorio de trabajo
COPY package*.json ./

# Instalar las dependencias
RUN npm install

# Instalar Angular CLI globalmente
RUN npm install -g @angular/cli

# Copiar el código fuente de la aplicación al directorio de trabajo
COPY . .

# Exponer el puerto en el que se ejecutará la aplicación Angular
EXPOSE 4200

# Iniciar la aplicación Angular en modo de desarrollo
CMD ["ng", "serve", "--host", "0.0.0.0", "--disable-host-check"]
