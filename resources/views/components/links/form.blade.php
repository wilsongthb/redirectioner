<div class="mb-3">
  <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
  <form action="{{ route('links.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <x-label for="namespace" value="Namespace" />
      <x-input id="namespace" name="namespace" type="text" />
    </div>
    <div class="mb-3">
      <x-label for="target" value="Link" />
      <x-input id="target" name="target" type="text" />
    </div>
    <x-button>Guardar</x-button>
  </form>
</div>
