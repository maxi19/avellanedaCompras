package com.avellaneda.demo.rest;

import com.avellaneda.demo.domain.User;
import com.avellaneda.demo.dto.UserDto;
import com.avellaneda.demo.service.UserService;
import io.netty.handler.codec.http.HttpResponse;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;
import org.apache.commons.beanutils.BeanUtils;


@RestController
@CrossOrigin(origins = "http://localhost:4200" ,allowCredentials = "false")
public class RegistroController {

    @Autowired
    UserService userService;

    public RegistroController(UserService userService){
        this.userService = userService;
    }



    @PostMapping({ "/registrar" })
    public ResponseEntity<?> registrarUser(@RequestBody UserDto userDto) {
        User user = new User();
        user = User.getUser(userDto);
        userService.registrarUsuario(user);
        return new ResponseEntity<>(userDto,HttpStatus.OK);
    }




}
