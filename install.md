# Requirements 
1. Docker API version >=1.12

# How build docker image and run container
- Clone repository
```bash
git clone https://github.com/akondratov/simplephpapp
```
- Build Docker image:
```bash
docker build -t simlephpapp .
```
- Run Docker container with application in detached mod and 8000 port opened
```bash
docker run -d -p 8000 simplephpapp 
```
- Check working app at address http://172.17.0.2:8000/ with your container's IP address