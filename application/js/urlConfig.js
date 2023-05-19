const CONSTANTS = {
    PROJECT_NAME: 'Ecommerce'
};

// Get the protocol (http or https)
const protocol = window.location.protocol;

// Get the host (domain)
const host = window.location.host;

// Combine the protocol and host
const url = protocol + '//' + host;

console.log(url);

const routes = {
    HOME: `${CONSTANTS.PROJECT_NAME}`,
    LOGIN: `${CONSTANTS.PROJECT_NAME}/login.php`,
    SIGNUP: `${CONSTANTS.PROJECT_NAME}/signup.php`,
    PRODUCT_DETAILS: `${CONSTANTS.PROJECT_NAME}/product-details.php`,
    CART: `${CONSTANTS.PROJECT_NAME}/checkout/cart.php`,
    CHECKOUT: `${CONSTANTS.PROJECT_NAME}/checkout`,
    THANKYOU: `${CONSTANTS.PROJECT_NAME}/thankyou`,
    ORDERS: `${CONSTANTS.PROJECT_NAME}/orders`,
    ORDER_DETAILS: `${CONSTANTS.PROJECT_NAME}/order-details.php`
};

for(let route in routes){
    routes[route] = url + '/' + routes[route].replaceAll(`//`, '/');
}

console.log({ routes });

const api = '/' + CONSTANTS.PROJECT_NAME + '/' + 'api';
const baseUrl = url + api.replaceAll('//', '/');

console.log({ baseUrl });
