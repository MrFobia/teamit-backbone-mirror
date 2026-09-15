import{i as d}from"./site-ho01C0BD.js";d();const e=document.querySelector("[data-residuos-form]");e==null||e.addEventListener("submit",c=>{var i;if(c.preventDefault(),!e.checkValidity()){e.reportValidity(),(i=e.querySelector(":invalid"))==null||i.focus();return}const t=[];e.querySelectorAll("input, select, textarea").forEach(o=>{if(!o.name)return;const n=o.type==="checkbox"?o.checked?"Sí":"No":o.value.trim();n&&t.push(`${o.name}: ${n}`)});const r=encodeURIComponent(`Solicitud de recolección de residuos

`+t.join(`
`));window.location.href=`mailto:info@teamit.com.co?subject=${encodeURIComponent("Recolección de residuos")}&body=${r}`});
