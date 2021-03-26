Star Trek - Galaxy War - User Interface
===========================================

Star Trek - Galaxy War, in short STGW, is a multiplayer game set in the Star Trek™ universe where the only tools needed to play are a web browser and an internet connection.

STGW is a tactical and strategic game running in real time to give players the maximum game experience possible.

Several races are available between Federation, Romulans, Klingons, Cardassians and many other, after the home world is created, the player would need to create new colonies in order to increase his power and fleets to expand the commercial routes with other players or to fight them with all the starships available. To boldly go where nobody has gone before!

Installation:
===============
1. Create a folder stgw in your www folder and clone Scheduler, Database, UI into it.
2. Import stgw.sql into your mysql Server
3. copy confic.inc.php.dist to config.inc.php in the UI Folder and edit the Settings and Paths
4. edit game/include/global.php and set the Path to config.inc.php in the Top
5. copy config.script.php.dist to config.script.php in the Schedduler Folder and edit the Settings and Paths
6. Add a crontab to Scheduler: (e.g. below)

@daily php /var/www/stgw/Scheduler/daily.php > /var/www/stgw/Scheduler/log/daily.log

*/3 * * * * php /var/www/stgw/Scheduler/main.php > /var/www/stgw/Scheduler/log/scheduler.log

*/1 * * * * php /var/www/stgw/Scheduler/moves_start.php > /var/www/stgw/Scheduler/log/moves.log

5 * * * * php /var/www/stgw/Scheduler/fix_all.php > /var/www/stgw/Scheduler/log/fix_all.log

0 */6 * * * php /var/www/stgw/Scheduler/six_hours.php > /var/www/stgw/Scheduler/log/sixhours.log

35 * * * * php /var/www/stgw/Scheduler/sigcreate.php > /var/www/stgw/Scheduler/log/signatures.log

7. Add Planets! (e.g.)
php Scheduler/populate_world.php -> to spawn 25 planets per quadrant
php Scheduler/populate_world_1600.php -> in order to spawn 125 planets per quadrant
(It's also possible to set up a Cronjob for this)
6. Update SQL Table config -> tick_stopped = 0, game_stopped = 0
7. Register a New Player
