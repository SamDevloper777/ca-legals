import './bootstrap';

async function initAlpine(){
	// Load Alpine and plugins dynamically to avoid initializing Alpine twice
	if (window.Alpine) {
		// Alpine already present (e.g. from Livewire). Just register plugins.
		const [{default: intersect}, {default: collapse}] = await Promise.all([
			import('@alpinejs/intersect'),
			import('@alpinejs/collapse')
		]);
		try{ window.Alpine.plugin(intersect); } catch(e) { /* ignore if already registered */ }
		try{ window.Alpine.plugin(collapse); } catch(e) { /* ignore if already registered */ }
		return;
	}

	const [{default: Alpine}, {default: intersect}, {default: collapse}] = await Promise.all([
		import('alpinejs'),
		import('@alpinejs/intersect'),
		import('@alpinejs/collapse')
	]);

	Alpine.plugin(intersect);
	Alpine.plugin(collapse);

	window.Alpine = Alpine;
	Alpine.start();
}

initAlpine();