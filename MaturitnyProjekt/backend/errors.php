if(empty($meno)) {
array_push($errors, "Zadajte meno žiaka");
}
if(empty($priezvisko)) {
array_push($errors, "Zadajte priezvisko žiaka");
}
if(empty($trieda)) {
array_push($errors, "Zadajte triedu žiaka");
}
if(empty($rocnik)) {
array_push($errors, "Zadajte ročník, ktorý bude žiak navštevovať");
}
if(empty($adresa_bydliska)) {
array_push($errors, "Zadajte adresu bydliska žiaka");
}
if(empty($mesto_bydliska)) {
array_push($errors, "Zadajte mesto bydliska žiaka");
}
if(empty($psc)) {
array_push($errors, "Zadajte PSČ");
}
if(empty($vzdialenost_od_internatu)) {
array_push($errors, "Zadajte vzdialenosť bydliska od internátu");
}