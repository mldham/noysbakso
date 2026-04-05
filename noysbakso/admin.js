function showPage(page){

document.getElementById("dashboard").style.display="none"
document.getElementById("penjualan").style.display="none"

document.getElementById(page).style.display="block"

}



// PIE CHART
fetch('piechart.php')
.then(res=>res.json())
.then(data=>{

let labels=[]
let values=[]

data.forEach(item=>{
labels.push(item.nama_produk)
values.push(item.total)
})

new Chart(document.getElementById('pieChart'),{
type:'pie',
data:{
labels:labels,
datasets:[{
data:values,
backgroundColor:[
'#ff6384',
'#36a2eb',
'#ffcd56',
'#4bc0c0',
'#9966ff'
]
}]
}
})

})



// TABEL PENJUALAN
fetch('penjualan.php')
.then(res=>res.json())
.then(data=>{

let table=""
let totalProduk=0

data.forEach(item=>{

totalProduk += parseInt(item.total)

table+=`
<tr>
<td>${item.nama_produk}</td>
<td>${item.total}</td>
</tr>
`

})

document.getElementById("tabelPenjualan").innerHTML=table
document.getElementById("totalProduk").innerHTML=totalProduk

})



// TREN PENJUALAN
fetch('tren.php')
.then(res=>res.json())
.then(data=>{

let tahun=[]
let total=[]

data.forEach(item=>{
tahun.push(item.tahun)
total.push(item.total)
})

new Chart(document.getElementById('lineChart'),{

type:'line',

data:{
labels:tahun,
datasets:[{
label:'Penjualan',
data:total,
borderColor:'#3498db',
backgroundColor:'rgba(52,152,219,0.2)',
fill:true
}]
}

})

})



// TOP PRODUK
fetch('topproduk.php')
.then(res=>res.json())
.then(data=>{

let produk=[]
let jumlah=[]

data.forEach(item=>{
produk.push(item.nama_produk)
jumlah.push(item.total)
})

new Chart(document.getElementById('barChart'),{

type:'bar',

data:{
labels:produk,
datasets:[{
label:'Terjual',
data:jumlah,
backgroundColor:'#2ecc71'
}]
}

})

})



// STATISTIK
fetch('statistik.php')
.then(res=>res.json())
.then(data=>{

document.getElementById("totalPesanan").innerHTML=data.total_pesanan
document.getElementById("totalPendapatan").innerHTML="Rp "+data.total_pendapatan


})