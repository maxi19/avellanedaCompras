package com.avellaneda.demo.service;

import com.avellaneda.demo.domain.User;
import com.avellaneda.demo.repository.UserRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class UserService {

    @Autowired
    private UserRepository userRepo;

    public UserService(UserRepository userRepo){
        this.userRepo = userRepo;
    }

    public void registrarUsuario(User user){
        userRepo.save(user);
    }

    public void actualizarUser(User user){

    }



}
