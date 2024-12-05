<x-app-layout>
    <x-slot name="header">
        <h2 style="
            font-size: 2rem;
            color: #2a8c6b;
            text-align: center;
            font-weight: bold;
            margin-bottom: 2rem;
        ">
            {{ __('Cadastrar uma Ubs') }}
        </h2>
    </x-slot>

    <body>
        <main>
            <section style="
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 80vh;
                background: linear-gradient(135deg, #daf5e9, #d3e5f7);
                padding: 2rem;
            ">
                <form action="/ubs/store" method="POST" style="
                    background: #ffffff;
                    padding: 2rem 3rem;
                    border-radius: 8px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    max-width: 400px;
                    width: 100%;
                ">
                    @csrf

                    <div style="margin-bottom: 1.5rem;">
                        <label for="name" style="
                            font-size: 1rem;
                            color: #333333;
                            margin-bottom: 0.5rem;
                            display: block;
                        ">Nome:</label>
                        <input type="text" name="name" id="name" style="
                            width: 100%;
                            padding: 0.75rem;
                            border: 1px solid #d3d3d3;
                            border-radius: 6px;
                            font-size: 1rem;
                            transition: all 0.3s ease;
                        " onfocus="this.style.borderColor='#2a8c6b'; this.style.boxShadow='0 0 4px rgba(42, 140, 107, 0.5)';" 
                        onblur="this.style.borderColor='#d3d3d3'; this.style.boxShadow='none';">
                    </div>

                    <div style="margin-bottom: 1.5rem;">
                        <label for="address" style="
                            font-size: 1rem;
                            color: #333333;
                            margin-bottom: 0.5rem;
                            display: block;
                        ">Endereço:</label>
                        <input type="text" name="address" id="address" style="
                            width: 100%;
                            padding: 0.75rem;
                            border: 1px solid #d3d3d3;
                            border-radius: 6px;
                            font-size: 1rem;
                            transition: all 0.3s ease;
                        " onfocus="this.style.borderColor='#2a8c6b'; this.style.boxShadow='0 0 4px rgba(42, 140, 107, 0.5)';" 
                        onblur="this.style.borderColor='#d3d3d3'; this.style.boxShadow='none';">
                    </div>

                    <div style="margin-bottom: 1.5rem;">
                        <label for="phone" style="
                            font-size: 1rem;
                            color: #333333;
                            margin-bottom: 0.5rem;
                            display: block;
                        ">Telefone:</label>
                        <input type="text" name="phone" id="phone" style="
                            width: 100%;
                            padding: 0.75rem;
                            border: 1px solid #d3d3d3;
                            border-radius: 6px;
                            font-size: 1rem;
                            transition: all 0.3s ease;
                        " onfocus="this.style.borderColor='#2a8c6b'; this.style.boxShadow='0 0 4px rgba(42, 140, 107, 0.5)';" 
                        onblur="this.style.borderColor='#d3d3d3'; this.style.boxShadow='none';">
                    </div>
                    <div>
                        <input type="submit" value="Cadastrar" 
                               style="width: 100%; padding: 0.8rem; background: #2a8c6b; color: white; border: none; border-radius: 8px; font-size: 1rem; cursor: pointer; transition: background 0.3s;">
                        
                    </div>
                </form>
            </section>
        </main>
    </body>
</x-app-layout>
