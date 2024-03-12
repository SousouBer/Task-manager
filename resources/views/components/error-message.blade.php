@props(['name'])

@error($name)
 <p class="text-xs px-8 pt-4 pb-6" style="color: #e91818">{{ $message }}</p>
@enderror
