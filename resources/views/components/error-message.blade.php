@props(['name'])

@error($name)
 <p class="text-xs px-8 py-4" style="color: #e91818">{{ $message }}</p>
@enderror
