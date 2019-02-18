let nbre = prompt("saisir le nombre a multiplier"); 
console.log(`Table de multiplication de ${nbre}`);
for(let i=1 ; i<=10; i++)
  {
   let a=nbre * i;
     console.log(`${nbre} x ${i} = ${a}`);
  }
console.log(`Fin de la table de multiplication de ${nbre}`);

