<?php foreach($attributes['events'] as $event): ?>

<style>
img {
  width: 100%;
}

.logo{
  width:60px;
  float:left;
  padding-right: 10px;
}

h3{
font-family: Russo One;
padding: 5px;
padding-left:none;
margin: 0px;
font-size: 35px;
}

h4{
font-family: Russo One;
padding-top:5px;
padding-bottom: 10px;
margin: 0px;
font-size: 30px;
}

p{
padding-top:5px;
padding-bottom: 10px;
margin: 0px;
font-family: helvetica;
}

.joindeft-button{
  padding: 10px;
  margin-top: 10px;
  background-color: #22E39C;
  border: none;
  color: black;
  font-size: 20px;
  width: 100%;
  text-decoration: none;
  text-align: center;
  font-family: Russo One;
}

.event{
  padding: 10px;
}

.title{
  display:flex;
}

</style>

<div class="event" style="border: #22E39C 1px solid">
    <div class="title">
   <img src="<?php echo esc_url( $event['logo']['url'] );?>" class="logo" alt="<?php echo esc_attr( $event['logo']['alt'] ); ?>">
   <h3 style="color:#22E39C;"><?php echo $event["name"] ?></h3>
    </div>
    <h4><?php echo date_i18n( 'F j, Y', strtotime( $event['date'] ) ); ?></h4>
    <img src="<?php echo esc_url( $event['poster']['url'] ); ?>" alt="<?php echo esc_attr( $event['poster']['alt'] ); ?>">
    <p><?php echo $event['description']; ?></p>
        </div>
<div class="joindeft">
    <button class="joindeft-button" onclick="window.open('<?php echo $event["tickets"]; ?>', '_blank')">
        JOIN EVENT
    </button>
</div>
<?php endforeach; ?>