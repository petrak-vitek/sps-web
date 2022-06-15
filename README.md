# sps-web
webové stránky vytvořené při výuce na sps dostupné na https://sps-web.vejtek.cz

script install.sh nainstaluje docker a spustí web server
```
 ~/home-server/install.sh
```
automatické stahování z githubu řeší cron job:
```
* *   *   *   *    cd /home/vitek/sps-web ; git pull 
```
