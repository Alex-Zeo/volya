# syntax=docker/dockerfile:1
FROM nginx:alpine

# Copy static website files
COPY website/ /usr/share/nginx/html/

# Copy nginx configuration
COPY nginx.conf /etc/nginx/nginx.conf

# Fix permissions for nginx worker
RUN chmod -R 755 /usr/share/nginx/html && \
    chown -R nginx:nginx /usr/share/nginx/html

# Railway uses PORT environment variable
EXPOSE 8080

# Start nginx
CMD ["nginx", "-g", "daemon off;"]
