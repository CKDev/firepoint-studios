# Firepoint Studios

The home of the [firepointstudios.com](https://www.firepointstudios.com) site.

## Config

All sensitive config data (of which there is almost none) is stored as config variables within the appropriate Heroku application (under Settings)

## Local Development

```
docker build -t latest .
docker run --name ckd -e NONCE_SECRET=<NONCE_SECRET> -e PORT=8080 -p 8080:8080 latest
```

Then navigate to `http://localhost:8080`

## Deployment

From the root directory, run the following commands to build the docker container and push to the appropriate Heroku app:

```
docker build -t latest .

// For deployment to staging
heroku container:push web --app firepoint-staging
heroku container:release web --app firepoint-staging

// For deployment to production
heroku container:push web --app firepoint-production
heroku container:release web --app firepoint-production
```