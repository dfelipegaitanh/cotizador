## Laravel API con base de datos MySQL

Este es un proyecto de una API construida con Laravel y una base de datos MySQL para administrar información sobre  
productos, cotizaciones y clientes. La aplicación está diseñada para manejar la información a través de llamadas a la  
API.

Estructura de la base de datos  
La base de datos MySQL para esta aplicación contiene las siguientes tablas:

***Users***: Almacena información sobre los usuarios del sistema, incluyendo su identificación y su rol en el sistema.  
***Roles***: Contiene información sobre los diferentes roles que pueden tener los usuarios del sistema.  
***Clients***: Almacena información sobre los clientes de la compañía, incluyendo su identificación y la identificación
del  
usuario que los creó.  
***Quotes***: Almacena información sobre las cotizaciones realizadas por los usuarios del sistema, incluyendo la  
identificación del usuario que realizó la cotización.  
***Quote Items***: Tabla intermedia que se utiliza para relacionar las cotizaciones con los productos específicos que
se  
cotizaron, incluyendo la identificación de la cotización y la identificación de los productos cotizados.  
***General Quotes***: Almacena información adicional sobre las cotizaciones, como la identificación de la cotización y
la  
identificación del cliente que recibió la cotización.  
***Products***: Almacena información sobre los productos disponibles, incluyendo su identificación, el tipo de producto,
la  
marca y la categoría.  
***Product Types***: Contiene información sobre los diferentes tipos de productos disponibles.  
***Brands***: Almacena información sobre las marcas de los productos.  
***Categories***: Almacena información sobre las categorías de productos disponibles.  
***Colors***: Almacena información sobre los colores disponibles para los productos.  
Product Colors: Tabla intermedia que se utiliza para relacionar los productos con los colores disponibles.

## Heading

**Conclusión**  
Esta API de Laravel con una base de datos MySQL es una solución robusta para administrar información sobre productos,  
cotizaciones y clientes a través de llamadas a la API.
