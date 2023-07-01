gcloud compute instances create laravel-instance \
--machine-type=n1-standard-1 \
--zone=asia-southeast1-b \
--image-family=debian-10 \
--image-project=debian-cloud \
--boot-disk-size=200GB \
--tags=http-server,https-server \
--metadata startup-script='#!/bin/bash
apt-get update
apt-get install -y apache2
service apache2 start
' 