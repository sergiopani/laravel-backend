<h1>All products</h1>
<ul>
  @foreach($products as $product)
    <li>
      <a href="/products/{{ $product['id'] }}">
        
        {{ $product['name']}}
        <strong>{{ $product['price'] }}</strong>
      </a>
    </li>    
  @endforeach 
  
</ul>

<a href="/products/create">Add new</a>