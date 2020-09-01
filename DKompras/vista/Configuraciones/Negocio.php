
<div  id="negocio" data-script="../../core/js/Negocio.js">


<v-form>
                    <v-container>
                        <v-row>
                            <v-col cols="6" sm="6">
                                <v-container>
                                    <v-row>                                      
                                            <v-col cols="12" sm="12">
                                                <v-text-field
                                                    placeholder
                                                    v-model="nombreNegocio"
                                                    label="Nombre de la empresa"
                                                    outlined
                                                    
                                                ></v-text-field>
                                            </v-col>

                                        </v-row>
                                        <v-row>
                                            
                                            <v-col cols="12" sm="12">
                                                <v-text-field
                                                v-model="email"
                                                    label="Correo electronico"
                                                    outlined
                                                ></v-text-field>
                                            </v-col>  

                                        </v-row>

                                        <v-row>
                                            
                                            <v-col cols="12" sm="12">
                                            <v-text-field
                                                v-model="direccion"
                                                    label="Direccion"
                                                    outlined
                                                ></v-text-field>
                                            </v-col>  

                                        </v-row>

                                        <v-row>
                                            
                                            <v-col cols="12" sm="12">
                                                <v-text-field
                                                v-model="ciudad"
                                                    label="Ciudad"
                                                    outlined
                                            
                                                ></v-text-field>
                                            </v-col>  

                                        </v-row>

                                        <v-row>
                                            
                                            <v-col cols="12" sm="12">
                                                <v-text-field
                                                v-model="estado"
                                                    placeholder
                                                    label="Estado"
                                                    outlined
                                                    
                                                ></v-text-field>
                                            </v-col>

                                        </v-row>

                                    
                                        <v-row>
                                            
                                            <v-col cols="12" sm="12">
                                                <v-text-field
                                                v-model="telefono"
                                                    placeholder
                                                    label="Telefono"
                                                    outlined
                                                    
                                                    
                                                ></v-text-field>
                                            </v-col>

                                        </v-row>

                                        <v-row>
                                            
                                            <v-col cols="12" sm="12">
                                                <v-text-field
                                                v-model="licencia"
                                                    placeholder
                                                    label="Licencia"
                                                    outlined
                                                    
                                                    
                                                ></v-text-field>
                                            </v-col>

                                        </v-row>
                                        <input type="file" accept="image/*" @change="onChangePreView" />
                                        <br>
                                        <br>
                                        <br>
                                    
                                    <v-btn rounded color="primary" @click="RegistrarProductos" dark>Agregar Producto</v-btn>
                                </v-container>

                    <v-container>
                        <v-row>
                            </v-col>
                             <v-col cols="12" sm="6">
                             
                             
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <v-chip
                        class="ma-2"
                        color="primary"
                        v-if="imageBase64"
                        >
                        Vista previa
                        </v-chip>
                             <v-img
                             v-if="item.imageUrl" :src="item.imageUrl"
                             aspect-ratio="1"
                             class="grey lighten-2"
                             max-width="500"
                             max-height="300"
                            >
                            </v-col>

                            
                        </v-row>

                        <v-alert type="error" v-if="error" dismissible>
                         {{error}}
                        </v-alert>
                      
                    </v-container>   
            </v-form>




</div>


