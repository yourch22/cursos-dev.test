<div id="modal-clouse"
    class="itemsubscripcionExpired hidden fixed w-full h-100 inset-0 z-50  flex justify-center items-center animated fadeIn faster"
    style="background: rgba(0,0,0,.7);">
    <div
        class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <div class="modal-content py-4 px-6">
            <div class="butonexpirar-close cursor-pointer z-50 ml-96">
                <svg class="fill-current text-black text-bold" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    viewBox="0 0 18 18">
                    <path
                        d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                    </path>
                </svg>
            </div>
            <!--Body-->
            <div class="wrapper bg-white rounded-sm shadow-lg">
                <div class="card px-8 py-4">
                    <div id="rpt-expired-modal">
                        <div class="card-text">
                            <h4 class="text-md md:text-lg font-bold leading-tight text-gray-900">¿El código de cupón que
                                está mostrando está caducado o no funciona?</h4>
                            <p class="text-base md:text-md text-gray-700 mt-3 ">En realidad, todos los códigos de cupón
                                que se muestran en Cursosdev funcionan al 100%, Debes tener en cuenta que los cupones
                                duran maximo 5 dias o hasta agotar 1000 inscripciones, pero puede vencer en cualquier
                                momento</p>
                        </div>
                        <input type="hidden" id="token" value="{{ csrf_token() }}" />
                        <div class="inline-block relative mt-3 w-64">
                            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            <option>Cupon caducado</option>
                            <option>Cupon no funcionó</option>
                            <option>Otros</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                          </div>
                    </div>
                    <div id="exito" class="p-4 flex space-x-4">
                        <button class="butonexpirar-close w-1/2 px-4 py-3 text-center bg-gray-100 text-gray-400 hover:bg-gray-200 hover:text-black font-bold rounded-lg text-sm">{{ __('Cerrar') }}</button>
                        <a subscrib="suscribcion" idCurso="{{ $cursosdetalle->id }}" id="reportexpired"
                            class="w-1/2 px-4 py-3 text-center cursor-pointer bg-oranges550 hover:bg-oranges650  hover:bg-oranges650
                            text-white font-bold capitalize rounded-lg">Enviar
                            Reporte</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
