echo "updating"
sudo apt update
sudo apt-get update

echo "instaling docker"
sudo apt install docker.io -y
sudo usermod -aG docker $USER

echo "instaling docker cokmpose"
sudo apt install -y docker-compose

echo "starting server stack"
docker-compose -f ./docker-compose.yaml up -d --remove-orphans
